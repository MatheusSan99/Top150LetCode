# LeetCode Problem: Binary Search Tree to Greater Sum Tree

## Problem Description

Given the root of a Binary Search Tree (BST), convert it to a Greater Tree such that every key of the original BST is changed to the original key plus the sum of all keys greater than the original key in BST.

As a reminder, a binary search tree is a tree that satisfies these constraints:

- The left subtree of a node contains only nodes with keys less than the node's key.
- The right subtree of a node contains only nodes with keys greater than the node's key.
- Both the left and right subtrees must also be binary search trees.

### Examples

**Example 1:**

- **Input:** `root = [4,1,6,0,2,5,7,null,null,null,3,null,null,null,8]`
- **Output:** `[30,36,21,36,35,26,15,null,null,null,33,null,null,null,8]`
- **Explanation:** 
  - The tree we are converting is shown below.

```
     4
   /   \
  1     6
 / \   / \
0   2 5   7
   /       \
  3         8
```

- **Output:** 
```
     30
   /    \
 36      21
 /  \    /  \
36  35 26  15
           /
         33
```

**Example 2:**

- **Input:** `root = [0,null,1]`
- **Output:** `[1,null,1]`

**Example 3:**

- **Input:** `root = [1,0,2]`
- **Output:** `[3,3,2]`

**Example 4:**

- **Input:** `root = [3,2,4,1]`
- **Output:** `[7,9,4,10]`

### Constraints

- The number of nodes in the tree is in the range `[1, 100]`.
- `0 <= Node.val <= 100`
- All the values in the tree are unique.
- `root` is guaranteed to be a valid binary search tree.

## Resolution in PHP

```
php
<?php

/**
 * Definition for a binary tree node.
 * class TreeNode {
 *     public $val = null;
 *     public $left = null;
 *     public $right = null;
 *     function __construct($val = 0, $left = null, $right = null) {
 *         $this->val = $val;
 *         $this->left = $left;
 *         $this->right = $right;
 *     }
 * }
 */
class Solution {

    public int $total = 0;
    /**
     * @param TreeNode $root
     * @return TreeNode
     */
    function bstToGst($root) {
        $this->recursionToTree($root);
        
        return $root;
    }
    
    private function recursionToTree($root) {
        if ($root != null) {
            $this->recursionToTree($root->right);
            $this->total += $root->val;
            $root->val = $this->total;
            $this->recursionToTree($root->left);
        }
    }
}
